import 'package:flutter/material.dart';
import 'package:vinyl_app/components/product.dart';



class CartDetails {
  final int personId;

  final int productId ;
  final String productName ;
  final String artist ;
  final String productImgUrl;
  final double price;

  final int cid ;
  final int quantity ;

  CartDetails({
    @required this.personId,
    @required this.productId,
    @required this.productName,
    @required this.artist,
    @required this.price,
    @required this.productImgUrl,
    @required this.cid,
    @required this.quantity,
  });

}

List<CartDetails> demoCarts = [
  CartDetails(personId: 77, productId: 1, productName: "Sus Pus", artist: "Ceza", price: 163.00 , cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0000000686726-1.jpg"),
  CartDetails(personId: 77, productId: 2, productName: "Good Girl Gone Bad", artist: "Rihanna", price: 159.98, cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0001712087001-1.jpg"),
  CartDetails(personId: 77, productId: 3, productName: "Bir de benden dinle", artist: "Müslüm Gürses", price: 114.00 , cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0001755791001-1.jpg"),
  CartDetails(personId: 77, productId: 4, productName: "Bounce", artist: "Bon Jovi", price: 96.00 , cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0000000706068-1.jpg"),
];
