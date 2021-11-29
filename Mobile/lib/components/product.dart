import 'package:flutter/cupertino.dart';
import 'package:vinyl_app/components/request.dart';
import 'package:vinyl_app/components/review.dart';
import 'package:vinyl_app/components/song.dart';
import 'dart:convert';

//product class
class Product {
  final int prid;
  final String pname;
  final String artist;
  final String genre;
  final String description;
  final double price;
  final int categoryId;
  final String productImgUrl;
  final int stock;
  final int isVisible;
  final int warranty;
  //final String distributor;
  final List<Song> songs;
  //final Request request;

  Product({
    @required this.prid,
    @required this.pname,
    @required this.artist,
    @required this.genre,
    @required this.description,
    @required this.price,
    @required this.categoryId,
    @required this.productImgUrl,
    @required this.stock,
    @required this.isVisible,
    @required this.warranty,
    //@required this.distributor,
    @required this.songs,
    //@required this.request,
  });

  factory Product.fromJson(Map<String, dynamic> json, [List<dynamic> list]) {
    List<Song> songList = [];
    List<Review> comments = [];
    if(list != null) {
      for (int i = 0; i < list.length; i++) {
        songList.add(Song.fromJson(list[i]));
      }
    }
    return Product(
      prid: json['prid'],
      pname: json['pname'],
      artist: json['artist'],
      genre: json['genre'],
      description: json['description'],
      price: json['price'] + .0,
      categoryId: json['categoryId'],
      productImgUrl: json['productImgUrl'],
      stock: json['stock'],
      isVisible: json['isVisible'],
      warranty: json['warranty'],
      //distributor: json['distributor'],
      songs: songList  ,
      //request: Request.fromJson(jsonDecode(json['request'])),
    );
  }
}
