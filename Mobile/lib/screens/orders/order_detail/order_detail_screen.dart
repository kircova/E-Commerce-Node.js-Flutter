import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/screens/orders/components/order_widget.dart';
import 'package:vinyl_app/screens/product_list/components/filter_page.dart';
import 'package:vinyl_app/screens/orders/order_detail/components/order_detail_body.dart';




class OrderDetailScreen extends StatefulWidget {
  static String routeName = "/order_details";
  OrderDetailScreen({Key key,
    @required this.oid,
  }) : super(key: key);
  final String oid;

  @override
  _OrderDetailScreenState createState() => _OrderDetailScreenState();
}

class _OrderDetailScreenState extends State<OrderDetailScreen> {

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
            "Order Detail",
            style: TextStyle(color: Colors.white),
          ),
        ],
      ),
    );
  }
}