import 'package:flutter/material.dart';
import 'package:vinyl_app/constants.dart';
import 'package:vinyl_app/screens/cart/cart_screen.dart';
import 'components/edit_profile.dart';
import 'components/profile_menu.dart';
import 'package:vinyl_app/screens/orders/orders_screen.dart';

class ProfileBody extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: kBackgroundColor,
      appBar: AppBar(
          title: const Text('Hello Username!')
      ),
      body: SingleChildScrollView(
        padding: EdgeInsets.symmetric(vertical: 20),
        child: Column(
          children: [
            Container(
              width: 130,
              height: 130,
              decoration: BoxDecoration(
                  border: Border.all(
                      width: 4,
                      color: kPrimaryColor),
                  boxShadow: [
                    BoxShadow(
                        spreadRadius: 2,
                        blurRadius: 10,
                        color: Colors.black.withOpacity(0.1),
                        offset: Offset(0, 10))
                  ],
                  shape: BoxShape.circle,
                  image: DecorationImage(
                      fit: BoxFit.cover,
                      image: AssetImage(
                        "assets/images/davidb.png",
                      ))),
            ),
            SizedBox(height: 20),
            ProfileMenu(
              text: "My Account",
              icon: "assets/icons/user-icon.svg",
              press: () => {
              Navigator.push(context,
              MaterialPageRoute(builder: (context) => EditProfilePage()))
              },
            ),
            ProfileMenu(
              text: "Shopping Cart",
              icon: "assets/icons/user-icon.svg",
              press: () {Navigator.push(context,
                  MaterialPageRoute(builder: (context) => CartScreen()));},
            ),
            ProfileMenu(
              text: "My Orders",
              icon: "assets/icons/vinyl.svg",
              press: () {Navigator.push(context,
                  MaterialPageRoute(builder: (context) => OrderScreen()));},
            ),
            ProfileMenu(
              text: "Adresses",
              icon: "assets/icons/user-icon.svg",
              press: () {},
            ),
            ProfileMenu(
              text: "Payment Method",
              icon: "assets/icons/user-icon.svg",
              press: () {},
            ),
            ProfileMenu(
              text: "Log Out",
              icon: "assets/icons/user-icon.svg",
              press: () {},
            ),
          ],
        ),
      ),
    );
  }
}