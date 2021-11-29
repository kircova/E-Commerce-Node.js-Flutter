import 'package:flutter/material.dart';
import 'package:vinyl_app/components/single_product.dart';
import 'package:vinyl_app/screens/details/details_screen.dart';

import 'package:http/http.dart' as http;
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'dart:convert';
import 'package:vinyl_app/constants.dart';
import 'package:google_fonts/google_fonts.dart';

import 'package:vinyl_app/components/product.dart';
import 'package:vinyl_app/components/request.dart';

class Search_list extends StatefulWidget {
  final String query;
  Search_list({Key key, @required this.query}) : super(key: key);

  @override
  _Search_listState createState() => _Search_listState();
}

class _Search_listState extends State<Search_list> {
  List<Widget> children;

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    this.GetProducts();
  }
  @override
  Widget build(BuildContext context) {
    return GridView(
      gridDelegate: new SliverGridDelegateWithFixedCrossAxisCount(crossAxisCount: 2),
      children: children != null ? children : [],
    );
  }
  Future GetProducts() async{
    var APIURL = env["apiUrl"] + "/products/search"; // bizim link

    List<Widget> children_list = [];

    Map maped ={
      'query': widget.query
    };

    print("JSON DATA: ${maped}");
    http.Response response = await http.post(Uri.parse(APIURL),body: maped);

    var data = jsonDecode(response.body);
    //print("DATA: ${data["genres"]}");
    //print(data);
    if(response.statusCode == 200){

      for(int i=0; i< data["products"].length; i++) {
        Product product = Product.fromJson(data["products"][i]);
        children_list.add(Single_prod(
          product_name: product.pname,
          prod_artist: product.artist,
          prod_picture: product.productImgUrl,
          prod_price: product.price,
          press: () {
            Navigator.push(context,
              MaterialPageRoute(builder: (context) => DetailsScreen(product: product,)));},
        ));
      }

      setState(() {
        children = children_list;
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
