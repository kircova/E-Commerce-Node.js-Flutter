import 'package:flutter/cupertino.dart';

class Review{
  final int cid;
  final int pid;
  final int prid;
  final String com_text;
  final int rating;
  final int isVisible;
  final String time;
  final int isApproved;

  Review({this.cid, this.pid, this.prid, this.com_text, this.rating, this.isVisible, this.time, this.isApproved});

  factory Review.fromJson(Map<String, dynamic> json){
    return Review(
      cid: json['cid'],
      pid: json['pid'],
      prid: json['prid'],
      com_text: json['com_text'],
      rating: json['rating'],
      isVisible: json['isVisible'],
      time: json['time'],
      isApproved: json['isApproved'],
    );
  }
}