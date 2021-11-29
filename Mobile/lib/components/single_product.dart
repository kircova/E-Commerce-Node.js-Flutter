import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

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