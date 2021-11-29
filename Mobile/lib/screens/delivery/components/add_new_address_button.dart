import 'package:flutter/material.dart';
import 'package:vinyl_app/constants.dart';
import 'new_address_form.dart';


class AddAddressButton extends StatelessWidget {


  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.symmetric(
        vertical: kDefaultPadding,
        horizontal: kDefaultPadding,
      ),

      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.only(
          topLeft: Radius.circular(5),
          topRight: Radius.circular(5),
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

            SizedBox(height: 5),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              crossAxisAlignment: CrossAxisAlignment.center,
              children: [
                Container(
                  decoration: BoxDecoration(border: Border.all(width: 1, color: Colors.black54 ),borderRadius: BorderRadius.circular(5),),//
                  child: SizedBox(
                    width: 300,
                    child: FlatButton (
                      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(5),),
                      color: Colors.white12,
                      child: Text(
                        "Add a New Address + ",
                        style: TextStyle(
                          fontSize: 20,
                          color: Colors.black,
                        ),
                      ),
                      onPressed: () => {Navigator.push(context,
                          MaterialPageRoute(builder: (context) => AddressFormScreen()))},
                    ),
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
