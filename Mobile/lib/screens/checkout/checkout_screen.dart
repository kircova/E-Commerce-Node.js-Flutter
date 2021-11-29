import 'package:flutter/material.dart';
import 'package:vinyl_app/screens/checkout/components/credit_card_info.dart';



class CheckoutScreen extends StatelessWidget {

  CheckoutScreen({Key key, }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: CreditCardPage(),
    );
  }
}