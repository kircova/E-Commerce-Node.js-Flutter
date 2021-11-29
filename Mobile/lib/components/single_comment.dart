import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:smooth_star_rating/smooth_star_rating.dart';

import '../constants.dart';

class Single_comment extends StatelessWidget {
  final com_text;
  final rating;
  final time;

  Single_comment({
    this.com_text,
    this.rating,
    this.time,
  });

  @override
  Widget build(BuildContext context) {
    String msg;
    com_text != null ? msg = com_text : msg = "";
    return Padding(padding: const EdgeInsets.all(10.0),
    child: Row(
      children: [
        Expanded(child:
        Column(
          children: [
            Row(

              children: [
                SmoothStarRating(
                  allowHalfRating: true,
                  size: 30.0,
                  isReadOnly: true,
                  rating: rating,
                  starCount: 5,

                  color: Colors.yellow,
                  borderColor: Colors.red,
                  spacing: 0.0,
                ),
                SizedBox(
                  width: 30,
                ),
                Padding(padding: EdgeInsets.only(top: kDefaultPadding, right:  kDefaultPadding, left: kDefaultPadding,
                    bottom: kDefaultPadding),
                  child: Text(time.toString()),
                ),
              ],
            ),
            Text(msg)
          ],
        )
        )
      ],
    ),
    );
  }
}