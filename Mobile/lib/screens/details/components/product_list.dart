import 'package:flutter/material.dart';

class Product_list extends StatefulWidget {
  @override
  _Product_listState createState() => _Product_listState();
}

class _Product_listState extends State<Product_list> {
  var product_list = [
    {
      "name": "Hero",
      "artist": "David Bowie",
      "picture":"assets/images/davidb.png",
      "price": 440,
    },
    {
      "name": "A Head Full of Dreams",
      "artist": "Coldplay",
      "picture":"assets/images/shopping.png",
      "price": 440,
    },
    {
      "name": "SON",
      "artist": "Lil Pesto",
      "picture":"assets/images/shopping-2.png",
      "price": 440,
    },
  ];
  @override
  Widget build(BuildContext context) {
    return GridView.builder(
        itemCount: product_list.length,
        gridDelegate: new SliverGridDelegateWithFixedCrossAxisCount(crossAxisCount: 2),
        itemBuilder: (BuildContext context, int index){
          return Single_prod(
            product_name: product_list[index]["name"],
            prod_picture: product_list[index]["picture"],
            prod_artist: product_list[index]["artist"],
            prod_price: product_list[index]["price"],
          );
        }
    );
  }
}

class Single_prod extends StatelessWidget {
  final product_name;
  final prod_artist ;
  final prod_price;
  final prod_picture;
  Single_prod({
    this.product_name,
    this.prod_artist,
    this.prod_picture,
    this.prod_price,
  });
  @override
  Widget build(BuildContext context) {
    return Card(
        child: Hero(tag: product_name, child: Material(
          child: InkWell(onTap: () {},
            child: GridTile(
              footer: Container(
                color: Colors.white70,
                child: ListTile(
                  leading: Text(product_name, style: TextStyle(fontWeight: FontWeight.bold),
                  ),
                  title: Text("\$$prod_price", style: TextStyle(color: Colors.green, fontWeight: FontWeight.w800),),
                ),
              ),
              child: Image.asset(prod_picture,
                fit: BoxFit.cover,),

            ),),))
    );
  }
}

