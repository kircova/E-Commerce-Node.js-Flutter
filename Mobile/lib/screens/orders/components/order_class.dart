import 'package:flutter/material.dart';


class Order {
  final int oid;
  final int orderDate ;
  final int status ;
  final int price ;
  Order({@required this.orderDate, @required this.price ,@required this.status,@required this.oid});
}