import 'package:flutter/material.dart';
import 'package:vinyl_app/constants.dart';


import 'package:vinyl_app/components/product.dart';
import 'package:vinyl_app/components/request.dart';
import 'package:vinyl_app/screens/details/Description/description_page.dart';

import 'package:vinyl_app/screens/details/components/image_and_icons.dart';
import 'package:vinyl_app/screens/details/components/title_and_price.dart';

class Body extends StatefulWidget {
  final Product product;
  Body({Key key, @required this.product}) : super(key: key);

  @override
  _BodyState createState() => _BodyState();
}

class _BodyState extends State<Body> {
  Widget child;

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    Size size = MediaQuery.of(context).size;
    return SingleChildScrollView(
      child: Column(
        children: <Widget>[
          ImageAndIcons(size: size, imageUrl: widget.product.productImgUrl,),
          TitleAndPrice(title: widget.product.pname, artist: widget.product.artist, price: widget.product.price),
          SizedBox(height: kDefaultPadding),
          Row(
            children: <Widget>[
              SizedBox(
                width: size.width / 2,
                height: 84,
                child: FlatButton(
                  shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.only(
                      topRight: Radius.circular(10),
                    ),
                  ),
                  color: kPrimaryColor,
                  onPressed: () {},
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
                  onPressed: () {
                    Navigator.push(context,
                        MaterialPageRoute(builder: (context) => Desc_page(product: widget.product,)));
                  },
                  child: Text("Description"),
                ),
              ),
            ],
          ),
        ],
      ),
    );
  }


}
