import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/screens/product_list/components/filter_page.dart';
import 'package:vinyl_app/screens/orders/components/orders_body.dart';
import 'package:vinyl_app/screens/orders/components/order_widget.dart';

class OrderScreen extends StatefulWidget {
  static String routeName = "/my orders";
  OrderScreen({Key key}) : super(key: key);

  @override
  _OrderScreenState createState() => _OrderScreenState();
}

class _OrderScreenState extends State<OrderScreen> {

  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      appBar: buildAppBar(),
      body: Body(),
    );
  }

  AppBar buildAppBar() {
    return AppBar(
      title: Column(
        children: [
          Text(
            "Your Previous Orders",
            style: TextStyle(color: Colors.white),
          ),
          Text(
            "${data.length} items",
            style: TextStyle(color: Colors.white),
          ),
        ],
      ),
    );
  }
}
