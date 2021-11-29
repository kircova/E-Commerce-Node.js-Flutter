import 'dart:io';

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
import 'package:vinyl_app/screens/login/login.dart';
import 'package:shared_preferences/shared_preferences.dart';



class Product_list extends StatefulWidget {
  final String genre;
  Product_list({Key key, @required this.genre}) : super(key: key);

  @override
  _Product_listState createState() => _Product_listState();
}

class _Product_listState extends State<Product_list> {
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
    var APIURL = env["apiUrl"] + "/products/filter/genre/" + widget.genre; // bizim link

    List<Widget> children_list = [];

    SharedPreferences prefs = await SharedPreferences.getInstance();
    var token = prefs.getString("token");

    // Send authorization headers to the backend.
    http.Response response = await http.get(Uri.parse(APIURL), headers: { HttpHeaders.authorizationHeader: "Bearer $token"},);

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
          press: () {Navigator.push(context,
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




