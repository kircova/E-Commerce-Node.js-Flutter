import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:vinyl_app/screens/product_list/product_list.dart';

import 'package:http/http.dart' as http;
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'dart:convert';
import 'package:vinyl_app/constants.dart';

class ListOption extends StatelessWidget {
  ListOption(String name) {this.name = name;}
  String name;
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return ListTile(
      title: Text(
        
        this.name,
        style: GoogleFonts.bebasNeue(
            textStyle: TextStyle(fontSize: 32, color: Colors.black54),
            letterSpacing: 4),
      ),
      onTap: () => {
        Navigator.push(context,
            MaterialPageRoute(builder: (context) => ProductList(genre: name,))),
      },
    );
  }
}




class NavDrawer extends StatefulWidget {
  @override
  _NavDrawerState createState() => _NavDrawerState();
}

class _NavDrawerState extends State<NavDrawer>{
  List<Widget> genres;


  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    this.GetGenres();
  }
  @override
  Widget build(BuildContext context) {

    return Drawer(
      child: ListView(
        padding: EdgeInsets.zero,
        children: genres != null ? genres : [],
      ),
    );
  }


  Future GetGenres() async{
    var APIURL = env["apiUrl"] + "/products/genres"; // bizim link

    List<Widget> childrens = [
      Container(
        color: kBackgroundColor,
        height: 130,
        child: DrawerHeader(
          child: Padding(
            padding: const EdgeInsets.all(10.0),
            child: Text(
              'Genres',
              style: GoogleFonts.bebasNeue(
                  textStyle: TextStyle(fontSize: 32, color: Colors.black54),
                  letterSpacing: 4),
            ),
          ),
        ),
      ),
      Divider(
        height: 20,
        thickness: 2,
        indent: 20,
        endIndent: 20,
      ),
    ];

    http.Response response = await http.get(Uri.parse(APIURL));

    var data = jsonDecode(response.body);
    //print("DATA: ${data["genres"]}");

    if(response.statusCode == 200){

      for(int i=0; i< data["genres"].length; i++) {
        childrens.add(ListOption(data["genres"][i]["genre"]));
      }
      childrens.add(Divider(
        height: 20,
        thickness: 2,
        indent: 20,
        endIndent: 20,
      ));
      setState(() {
        genres = childrens;
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
