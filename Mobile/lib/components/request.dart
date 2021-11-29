import 'package:flutter/cupertino.dart';

class Request {
  final String type;
  final String url;

  Request({@required this.type, @required this.url});

  factory Request.fromJson(Map<String, dynamic> json) {
    return Request(
      type: json['type'],
      url: json['url'],
    );
  }
}