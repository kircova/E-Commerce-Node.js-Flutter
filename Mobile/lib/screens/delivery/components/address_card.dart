import 'package:flutter/material.dart';
import 'package:circular_check_box/circular_check_box.dart';
import 'package:vinyl_app/constants.dart';
import 'package:vinyl_app/screens/delivery/components/delivery_details_class.dart';


class AddressCard extends StatelessWidget {
  const AddressCard({
    Key key,
    @required this.address,
  }) : super(key: key);

  final DeliveryDetails address;

  @override

  Widget build(BuildContext context) {
    bool chosen = false;
    return Card(
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(5.0),),
      child: Row(
        children: [
          SizedBox(
            width: 88,
            child: AspectRatio(
              aspectRatio: 0.65,
              child: Container(
                padding: EdgeInsets.all(5),
                decoration: BoxDecoration(
                  color: Colors.white,
                  borderRadius: BorderRadius.circular(5),
                ),
                child:
                   CircularCheckBox(
                      value: chosen,
                      materialTapTargetSize: MaterialTapTargetSize.padded,
                      onChanged: (bool x) {
                        chosen = !chosen;
                      }
                  ),
                ),
              ),
            ),
          SizedBox(width: 30),
          Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
               address.personName,
                style: TextStyle(color: Colors.black, fontSize: 16),
                maxLines: 2,
              ),
              SizedBox(height: 10),
              Text(
                address.addressName,
                style: TextStyle(
                    fontWeight: FontWeight.w600, color: kPrimaryColor),
              ),
              SizedBox(height: 10),
              Text(
                address.addressDetails,
                style: TextStyle(
                    fontWeight: FontWeight.w600, color: Colors.black54),
              ),

            ],
          )
        ],
      ),
    );
  }
}
