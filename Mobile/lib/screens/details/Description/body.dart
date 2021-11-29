import 'package:flutter/material.dart';
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'package:vinyl_app/components/size_config.dart';
import 'package:vinyl_app/constants.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

import 'package:vinyl_app/components/product.dart';
import 'package:vinyl_app/screens/Reviews/Review_page.dart';
import 'package:vinyl_app/screens/Reviews/body.dart';

import '../../../constants.dart';

class Song {
  final name;
  final num;
  Song(this.name, this.num);

}

class desc_page extends StatefulWidget {
  final Product product;


  const desc_page({Key key, @required this.product}) : super(key: key);

  @override
  _desc_pageState createState() => _desc_pageState();
}

class _desc_pageState extends State<desc_page> {
  List<Song> Songs;
  int stock;
  double price;

  void initState() {
    // TODO: implement initState
    super.initState();
    this.GetSongs();
  }
  @override
  Widget build(BuildContext context) {
    return ListView(
        children: [
          SizedBox(
            //width: getProportionateScreenWidth(230),
            child: AspectRatio(
              aspectRatio: 1,
              child: Image.network(widget.product.productImgUrl),
            ),
          ),
          Container(
            color: Colors.white,
            child: Column(
              children: <Widget>[
                Row(
                  children: [
                    Padding(
                        padding: EdgeInsets.only(left: kDefaultPadding),
                        child: Text("₺ " + price.toString(), style: TextStyle(
                          fontSize: 23,
                          color: Colors.red,
                        ),),
                    ),
                    Spacer(),
                    Padding(
                      padding: EdgeInsets.only(right: kDefaultPadding),
                      child: Text(stock.toString() + " available", style: TextStyle(
                        fontSize: 17,
                        color: Colors.grey,
                      ),),
                    ),
                  ],
                ),
                Padding(
                  padding: const EdgeInsets.symmetric(
                    //horizontal: getProportionateScreenWidth(20),
                  ),
                  child: Text(widget.product.pname,
                    style: Theme.of(context).textTheme.headline5,),
                ),
                Padding(padding: EdgeInsets.only(top: kDefaultPadding, right:  kDefaultPadding, left: kDefaultPadding,
                    bottom: kDefaultPadding),
                  child: Text(widget.product.description),
                ),
                Padding(
                  padding: const EdgeInsets.symmetric(
                    //horizontal: getProportionateScreenWidth(20),
                  ),
                  child: Text("Song List",
                    style: Theme.of(context).textTheme.headline6,),
                ),
                ListView.builder(
                    shrinkWrap: true,
                    physics: ClampingScrollPhysics(),
                    itemCount: Songs != null ? Songs.length : 0,
                    itemBuilder: (context, index){
                      return ListTile(
                        title: new Text(Songs[index].num.toString() + ". " + Songs[index].name),
                      );
                    }),
                Row(
                  children:<Widget> [
                    Expanded(
                      child: FlatButton(
                        onPressed: (){
                          {Navigator.push(context,
                              MaterialPageRoute(builder: (context) => ReviewPage(product: widget.product)));}
                        },
                        child: Text("Rating & Reviews",style: TextStyle(
                          color: kPrimaryColor,
                        ),),
                      ),
                    ),
                  ]
                ),
                Row(
                  children: <Widget>[
                    Expanded(
                      child: FlatButton(

                        color: kPrimaryColor,
                        onPressed: (
                            // buy now etkisi
                            ) {},
                        child: Text(
                          "Buy Now",
                          style: TextStyle(
                            color: Colors.white,
                            fontSize: 16,
                          ),
                        ),
                      ),
                    ),

                    Expanded(
                      child: FlatButton(
                        color: kPrimaryColor,
                        onPressed: () {
                          // carta atcak urunu
                        },
                        child: Text("Add to cart",style: TextStyle(
                          color: Colors.white,
                          fontSize: 16,
                        ),
                        ),
                      ),
                    ),
                  ],
                ),
              ],
            ),
          )
        ],

    );
  }

  Future GetSongs() async{
    var APIURL = env["apiUrl"] + "/products/" + widget.product.prid.toString();

    List<Song> children_list = [];

    http.Response response = await http.get(Uri.parse(APIURL));
    var data = jsonDecode(response.body);

    if(response.statusCode == 200){
      int stocknum = data["product"]["stock"];
      double pricenum = data["product"]["price"] + .0;
      for(int i = 0; i < data["product"]["Songs"].length; i++){
        String name = data["product"]["Songs"][i]["songname"];
        int num = data["product"]["Songs"][i]["TrackNumber"];
        Song song = Song(name,num);
        children_list.add(song);
      }

      setState(() {
        // tracknumbera gore gelsn diye sorting
        children_list.sort((a,b) => a.num.compareTo(b.num));
        Songs = children_list;
        stock = stocknum;
        price = pricenum;
      });
    }
    else{
      print('Something went wrong');
    }
  }
}