import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/components/my_bottom_nav_bar.dart';
import 'package:vinyl_app/components/nav_drawer.dart';
import 'package:vinyl_app/screens/product_list/components/body.dart';
import 'package:vinyl_app/screens/searchbar/search_body.dart';

class SearchList extends StatelessWidget {
  final String query;
  SearchList({Key key, @required this.query}) : super(key: key);


  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      drawer: NavDrawer(),
      appBar: buildAppBar(),
      body: Search_list(query: query,),
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
    );
  }
}