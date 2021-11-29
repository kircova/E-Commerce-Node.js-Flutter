// ignore: avoid_web_libraries_in_flutter
//import 'dart:html';

import 'package:flutter/material.dart';
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/components/my_bottom_nav_bar.dart';
import 'package:vinyl_app/components/nav_drawer.dart';
import 'package:http/http.dart' as http;
import 'package:vinyl_app/components/product.dart';
import 'dart:convert';
import 'package:vinyl_app/screens/product_list/components/filter_page.dart';
import 'package:vinyl_app/screens/details/details_screen.dart';

class FilteredList extends StatelessWidget {
  final int value;
  final RangeValues ranges;
  FilteredList({Key key, this.value = 0, this.ranges}) : super(key: key);


  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      drawer: NavDrawer(),
      appBar: buildAppBar(),
      body: filtered_List(value: value, ranges: ranges),
      bottomNavigationBar: MyBottomNavBar(),
    );
  }

  AppBar buildAppBar() {
    return AppBar(
      elevation: 0,
      leading: IconButton(
        icon: SvgPicture.asset("assets/icons/menu.svg"),
        onPressed: () => _scaffoldKey.currentState.openDrawer(),
      ),
        actions: [
          StatefulBuilder(builder: (BuildContext context, setState)
          {
            return IconButton(
              icon: Icon(
                Icons.filter_list_alt,
                color: Colors.white70,
                size: 30.0,),
              onPressed: () => {Navigator.push(context,
                  MaterialPageRoute(builder: (context) => FilterPage()))},
            );
          },
          )
        ]
    );
  }
}

class filtered_List extends StatefulWidget {
  final int value;
  final RangeValues ranges;
  filtered_List({Key key, this.value = 0, this.ranges = const RangeValues(0, 1000)}) : super(key: key);

  @override
  _filtered_ListState createState() => _filtered_ListState();
}

class _filtered_ListState extends State<filtered_List>{
  List<Widget> children;
  @override
  void initState(){
    super.initState();
    this.getProducts();
  }
  @override

  Widget build(BuildContext context) {
    return GridView(
      gridDelegate: new SliverGridDelegateWithFixedCrossAxisCount(crossAxisCount: 2),
      children: children != null ? children : [],
    );
  }
  Future getProducts() async{
    var apiURL;
    if(widget.value == 1){
      apiURL = env["apiUrl"] + "/products/filter/alphabetical/increase";
    }
    if(widget.value == 2){
      apiURL = env["apiUrl"] + "/products/featured";
    }
    if(widget.value == 3){
      apiURL = env["apiUrl"] + "/products/filter/price/decrease";
    }
    if(widget.value == 4){
      apiURL = env["apiUrl"] + "/products/filter/price/increase";
    }
    else{
      //ranged value filteri gelirse
      this.widget.ranges?.start != null && this.widget.ranges?.end != null ?
      apiURL = env["apiUrl"] + "/products/filter/price/" + widget.ranges.start.round().toString()
        + "/" + widget.ranges.end.round().toString() : [];
    }

    List<Widget> children_list = [];

    http.Response response = await http.get(Uri.parse(apiURL));

    var data = jsonDecode(response.body);

    if(response.statusCode == 200){
      if(widget.value == 2){
        for(int i = 0; i < 10; i++){
          http.Response response = await http.get(Uri.parse(env["apiUrl"] + "/products/" + data["values"][i][0]));
          var productData = jsonDecode(response.body);
          Product product = Product.fromJson(productData['product'], productData['songs']);
          children_list.add(Single_prod(
            product_name: product.pname,
            prod_artist: product.artist,
            prod_picture: product.productImgUrl,
            prod_price: product.price,
            press: () {Navigator.push(context,
                MaterialPageRoute(builder: (context) => DetailsScreen(product: product,)));},
          ));
        }
      }
      else{
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

class Single_prod extends StatelessWidget {
  final product_name;
  final prod_artist ;
  final prod_price;
  final prod_picture;
  final Function press;

  Single_prod({
    this.product_name,
    this.prod_artist,
    this.prod_picture,
    this.prod_price,
    this.press,
  });
  @override
  Widget build(BuildContext context) {
    return Card(
        child: Hero(tag: product_name, child: Material(
          child: InkWell(onTap: () {press();},
            child: GridTile(
              footer: Container(
                color: Colors.white70,
                child: ListTile(
                  leading: SizedBox(

                    width: 85.0, // fixed width and height
                    child:  Text(product_name, style: TextStyle(fontWeight: FontWeight.bold), overflow: TextOverflow.ellipsis,maxLines: 2,
                    ),
                  ),
                  title: Align(
                    alignment: Alignment.centerRight,
                    child:  Text("\₺$prod_price", style: TextStyle(color: Colors.green, fontWeight: FontWeight.w700, fontSize: 15)
                      ,overflow: TextOverflow.ellipsis,),
                  ),
                ),
              ),
              child: Image.network(prod_picture,
                fit: BoxFit.cover,),

            ),),))
    );
  }
}