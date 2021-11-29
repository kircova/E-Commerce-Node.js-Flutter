import 'package:flutter/material.dart';
import 'package:vinyl_app/screens/delivery/components/address_card.dart';
import 'package:vinyl_app/screens/delivery/components/delivery_details_class.dart';
import 'package:vinyl_app/constants.dart';
import 'package:flutter_svg/svg.dart';

class DeliveryBody extends StatefulWidget {
  @override
  _DeliveryBodyState createState() => _DeliveryBodyState();
}

class _DeliveryBodyState extends State<DeliveryBody> {
  @override
  Widget build(BuildContext context) {
    return Padding(
      padding:
      EdgeInsets.symmetric(horizontal: kDefaultPadding),
      child: ListView.builder(
        itemCount: demoAddressCarts.length,
        itemBuilder: (context, index) => Padding(
          padding: EdgeInsets.symmetric(vertical: 10),
          child: Dismissible(
            key: Key(demoAddressCarts[index].addressId.toString()),
            direction: DismissDirection.endToStart,
            onDismissed: (direction) {
              setState(() {
                demoAddressCarts.removeAt(index);
              });
            },
            background: Container(
              padding: EdgeInsets.symmetric(horizontal: 20),
              decoration: BoxDecoration(
                color: Color(0xFFFFE6E6),
                borderRadius: BorderRadius.circular(15),
              ),
              child: Row(
                children: [
                  Spacer(),
                  SvgPicture.asset("assets/icons/Trash.svg"),
                ],
              ),
            ),
            child: AddressCard(address: demoAddressCarts[index]), //data[index]
          ),
        ),
      ),
    );
  }
}