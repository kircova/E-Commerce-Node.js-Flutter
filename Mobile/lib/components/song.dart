import 'package:flutter/cupertino.dart';

class Song {
  final int prid;
  final String songName;
  final int trackNo;

  Song({
    @required this.prid,
    @required this.songName,
    @required this.trackNo,
  });

  factory Song.fromJson(Map<String, dynamic> json) {
    return Song(
      prid: json['prid'],
      songName: json['songname'],
      trackNo: json['TrackNumber'],
    );
  }


}