import 'package:flutter/material.dart';
import 'package:vinyl_app/constants.dart';
import 'package:vinyl_app/screens/cart/components/cart_details.dart';
import 'package:vinyl_app/screens/delivery/delivery_screen.dart';
import 'cart_details.dart';
import "package:vinyl_app/screens/checkout/checkout_screen.dart";

class CheckoutCard extends StatefulWidget {

  const CheckoutCard({
    Key key,
  }) : super(key: key);


  @override
  _CheckoutCardState createState() => _CheckoutCardState();
}

class _CheckoutCardState extends State<CheckoutCard> {

  double calculateTotalPrice() {
    double sum = 0;
    for (int i = 0; i< demoCarts.length ; i++) {
      sum = sum + demoCarts[i].price;
    }
      return sum;
    }



  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.symmetric(
        vertical: kDefaultPadding,
        horizontal: kDefaultPadding,
      ),
      // height: 174,
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.only(
          topLeft: Radius.circular(30),
          topRight: Radius.circular(30),
        ),
        boxShadow: [
          BoxShadow(
            offset: Offset(0, -15),
            blurRadius: 20,
            color: Color(0xFFDADADA).withOpacity(0.15),
          )
        ],
      ),
      child: SafeArea(
        child: Column(
          mainAxisSize: MainAxisSize.min,
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Row(
              children: [

                Spacer(),
                Text("Add voucher code"),
                const SizedBox(width: 10),
                Icon(
                  Icons.arrow_forward_ios,
                  size: 12,
                  color: kTextColor,
                )
              ],
            ),
            SizedBox(height: 5),
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Text.rich(
                  TextSpan(
                    text: "Total:\n",
                    children: [
                      TextSpan(
                        text: "\₺${calculateTotalPrice().toString()}",
                        style: TextStyle(fontSize: 16, color: Colors.black),
                      ),
                    ],
                  ),
                ),
                SizedBox(
                  width: 200,
                  child: FlatButton(
                    shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10)),
                    color: kPrimaryColor,
                    child: Text(
                      "Checkout",
                      style: TextStyle(
                        fontSize: 20,
                        color: Colors.white,
                      ),
                    ),
                    onPressed: () => {Navigator.push(context,
                        MaterialPageRoute(builder: (context) => DeliveryScreen()))},
                  ),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
