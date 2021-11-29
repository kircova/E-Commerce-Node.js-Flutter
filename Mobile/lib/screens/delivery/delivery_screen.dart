import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/screens/delivery/components/address_card.dart';
import 'package:vinyl_app/screens/delivery/components/body.dart';
import 'package:vinyl_app/screens/delivery/components/delivery_details_class.dart';
import 'package:vinyl_app/screens/delivery/components/add_new_address_button.dart';

class DeliveryScreen extends StatefulWidget {
  static String routeName = "/cart";
  DeliveryScreen({Key key}) : super(key: key);

  @override
  _DeliveryScreenState createState() => _DeliveryScreenState();
}

class _DeliveryScreenState extends State<DeliveryScreen> {

  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      appBar: buildAppBar(),
      body: DeliveryBody(),
      bottomNavigationBar: AddAddressButton()
    );
  }

  AppBar buildAppBar() {
    return AppBar(
      title: Column(
        children: [
          Text(
            " ",
            style: TextStyle(color: Colors.white),
          ),
          Text(
            "Choose Delivery Address",
            style: TextStyle(color: Colors.white),
          ),
        ],
      ),
    );
  }
}
