import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/components/my_bottom_nav_bar.dart';
import 'package:vinyl_app/components/nav_drawer.dart';
import 'package:vinyl_app/screens/home/components/body.dart';
import 'package:vinyl_app/screens/product_list/components/filter_page.dart';
import 'package:vinyl_app/screens/cart/cart_screen.dart';
class HomeScreen extends StatelessWidget {
  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      drawer: NavDrawer(),
      appBar: buildAppBar(),
      body: Body(),
      bottomNavigationBar: MyBottomNavBar(),
    );
  }

  AppBar buildAppBar() {
    return AppBar(
      elevation: 0,
      leading: IconButton(
        icon: SvgPicture.asset("assets/icons/menu.svg"),
        onPressed: () => _scaffoldKey.currentState.openDrawer(),
      ),
        actions: [
          StatefulBuilder(builder: (BuildContext context, setState)
          {
            return IconButton(
              icon: Icon(
                Icons.filter_list_alt,
                color: Colors.white70,
                size: 30.0,),
              onPressed: () => {Navigator.push(context,
                  MaterialPageRoute(builder: (context) => FilterPage()))},
            );
          },
          ),

          StatefulBuilder(builder: (BuildContext context, setState)
          {
            return IconButton(
              icon: Icon(
                Icons.shopping_cart,
                color: Colors.white70,
                size: 30.0,),
              onPressed: () => {Navigator.push(context,
                  MaterialPageRoute(builder: (context) => CartScreen()))},
            );
          },
          )
        ]
    );
  }
}
