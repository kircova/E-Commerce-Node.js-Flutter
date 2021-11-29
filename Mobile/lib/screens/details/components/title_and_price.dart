import 'package:flutter/material.dart';

import '../../../constants.dart';

class TitleAndPrice extends StatelessWidget {
  const TitleAndPrice({
    Key key,
    this.title,
    this.artist,
    this.price,
  }) : super(key: key);

  final String title, artist;
  final double price;

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.symmetric(horizontal: kDefaultPadding),
        child: Row(
          children: <Widget>[
            SizedBox(
              width: 200,
              child: RichText(
                maxLines: 5,
                overflow: TextOverflow.ellipsis,
                text: TextSpan(
                  children: [
                    TextSpan(
                      text: "$title\n",
                      style: Theme.of(context)
                          .textTheme
                          .headline4
                          .copyWith(color: kTextColor, fontWeight: FontWeight.bold, fontSize: 30),
                    ),
                    TextSpan(
                      text: artist,
                      style: TextStyle(
                        fontSize: 20,
                        color: kPrimaryColor,
                        fontWeight: FontWeight.w300,
                      ),
                    ),
                  ],
                ),
              ),
            ),
            Spacer(),
            Text(
              "\₺$price",
              style: Theme.of(context)
                  .textTheme
                  .headline5
                  .copyWith(color: kPrimaryColor),
            )
          ],
        ),

    );
  }
}
