import 'dart:convert';
import 'dart:io';

import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:vinyl_app/components/review.dart';
import 'package:flutter/material.dart';
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:vinyl_app/components/product.dart';
import 'package:flutter_rating_bar/flutter_rating_bar.dart';
import 'package:http/http.dart' as http;

import '../../constants.dart';

class Add_review extends StatefulWidget {
  final Product product;

  Add_review({Key key, @required this.product}) : super(key: key);
  @override
  _Add_reviewState createState() => _Add_reviewState();
}

class _Add_reviewState extends State<Add_review> {
  String comment;
  double rate;

  void initState() {
    // TODO: implement initState
    super.initState();
  }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar (
          title: Text("Add review"),
      ),
      body: Column(
        children: <Widget>[
          Padding(
            padding: EdgeInsets.only(top: kDefaultPadding, bottom: kDefaultPadding),
            child: Text("Rating",
              style: Theme.of(context).textTheme.headline5,),
          ),
          Align(
            alignment: Alignment.topCenter,
            child: RatingBar.builder(
                initialRating: 3,
                minRating: 1,
                direction: Axis.horizontal,
                allowHalfRating: false,
                itemCount: 5,
                itemPadding: EdgeInsets.symmetric(horizontal: 4.0),
                itemBuilder: (context, _) => Icon(
                  Icons.star,
                  color: Colors.amber,
                ),
                onRatingUpdate: (rating){
                  rate = rating;
                }
            ),
          ),
          SizedBox(
            height: 20,
          ),
          Card(
            child: Padding(
              padding: EdgeInsets.all(8.0),
              child: TextField(
                maxLines: 8,
                keyboardType: TextInputType.multiline,
                decoration: InputDecoration.collapsed(hintText: "Enter your comment"),
                onChanged: (text){
                  comment = text;
                },
              ),
            ),
          ),
          SizedBox(
            height: 20,
          ),
          Row(
              children:<Widget> [
                Expanded(
                  child: FlatButton(
                    color: kPrimaryColor,
                    onPressed: (){
                      AddComment(widget.product.prid, comment, rate);
                      Navigator.pop(context);
                    },
                    child: Text("Submit",style: TextStyle(
                      color: Colors.white,
                      fontSize: 16,
                    ),),
                  ),
                ),
              ]
          ),
        ],
      ),
    );
  }
  
  

  Future <http.Response>AddComment(int prid,String comment,double rate) async {

    var APIURL = env["apiUrl"] + "/products/add/comment";

    SharedPreferences prefs = await SharedPreferences.getInstance();
    var token = prefs.getString("token");
    print(token);
    var data= {
      'data': {
        'rating': rate.toString(),
        'text': comment.toString(),
        'prid': prid.toString(),},
    };

    var data2 = {
        'rating': rate.toString(),
        'text': comment.toString(),
        'prid': prid.toString(),
    };
    // BU hic olmuyor amk
    /*
    HttpClient httpClient = new HttpClient();
    HttpClientRequest request = await httpClient.postUrl(Uri.parse(APIURL));
    request.headers.set(HttpHeaders.contentTypeHeader,'x-www-form-urlencoded');
    request.headers.set(HttpHeaders.authorizationHeader,' Bearer $token');
    request.headers.add("body",utf8.encode(json.encode(data2)));
    HttpClientResponse response = await request.close();
    String reply = await response.transform(utf8.decoder).join();
    httpClient.close();
    return reply;
    */



    // Send authorization headers to the backend.

    var response = await http.post(Uri.parse(APIURL),
        headers: { HttpHeaders.authorizationHeader: "Bearer $token"}, body: data2);
    //return response;

    if(response.statusCode == 201){
      print("Successfully added comment");
    }
    else{
      print("Can't add review. Try again later");
    }
  }
}
