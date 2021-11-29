import 'package:flutter/material.dart';
import 'package:vinyl_app/screens/details/components/body.dart';
import 'package:vinyl_app/components/product.dart';


class DetailsScreen extends StatelessWidget {
  final Product product;
  DetailsScreen({Key key, @required this.product}) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Body(product: product,),
    );
  }
}
