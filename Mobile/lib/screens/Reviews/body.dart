import 'package:flutter/material.dart';
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'package:vinyl_app/components/product.dart';
import 'package:vinyl_app/components/review.dart';
import 'package:vinyl_app/components/single_comment.dart';
import 'package:vinyl_app/constants.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:smooth_star_rating/smooth_star_rating.dart';

import 'package:vinyl_app/screens/Reviews/Add_review.dart';

// ignore: camel_case_types
class review_page extends StatefulWidget {
  final Product product;

  review_page({Key key, @required this.product}) : super(key: key);
  @override
  _review_pageState createState() => _review_pageState();
}

class _review_pageState extends State<review_page> {
  List<Widget> comments;

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    this.GetComments();
  }
  @override
  Widget build(BuildContext context) {
    return ListView(
      children: [
        Row(
            children:<Widget> [
              Expanded(
                child: FlatButton(
                  onPressed: (){
                    Navigator.push(context,
                        MaterialPageRoute(builder: (context) => Add_review(product: widget.product,)));
                  },
                  child: Text("Add a review for this product",style: TextStyle(
                    color: kPrimaryColor,
                  ),),
                ),
              ),
            ]
        ),
        ListView(
          shrinkWrap: true,
          physics: ClampingScrollPhysics(),
          children: comments != null ? comments : [],
        ),
      ],
    );
  }

  Future GetComments() async {
    var APIURL = env["apiUrl"] + "/products/" + widget.product.prid.toString();
    List<Widget> list = [];

    http.Response response = await http.get(Uri.parse(APIURL));
    var data = jsonDecode(response.body);
    if(response.statusCode == 200){
      for(int i = 0; i < data["product"]["Comments"].length ; i++){
        Review review = Review.fromJson(data["product"]["Comments"][i]);
        list.add(Single_comment(
          com_text: review.com_text,
          rating: review.rating + .0,
          time: review.time,
        ));
      }
      setState(() {
        comments = list;
      });
    }
    else if(response.statusCode == 400){
      // biyer bosluk bırakılmıs, onu uyarcaz
    }
    else if(response.statusCode == 422){
      // girilen bilgiler yanlış
    }
    else if(response.statusCode == 500){
      // serverda hata varsa
    }
  }
}
