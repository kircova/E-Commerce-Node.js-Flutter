import 'package:flutter/material.dart';
import 'components/cart_body.dart';
import 'components/cart_card.dart';
import 'components/check_out_card.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/screens/product_list/components/filter_page.dart';
import 'components/cart_details.dart';

class CartScreen extends StatefulWidget {
  static String routeName = "/cart";
  CartScreen({Key key}) : super(key: key);

  @override
  _CartScreenState createState() => _CartScreenState();
}

class _CartScreenState extends State<CartScreen> {

  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      appBar: buildAppBar(),
      body: Body(),
      bottomNavigationBar: CheckoutCard(),
    );
  }

  AppBar buildAppBar() {
    return AppBar(
      title: Column(
        children: [
          Text(
            "Your Cart",
            style: TextStyle(color: Colors.white),
          ),
          Text(
            "${demoCarts.length} items",
            style: TextStyle(color: Colors.white),
          ),
        ],
      ),
    );
  }
}
