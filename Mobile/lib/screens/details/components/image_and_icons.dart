import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';

import 'package:vinyl_app/constants.dart';
import 'icon_card.dart';

class ImageAndIcons extends StatelessWidget {


  const ImageAndIcons({
    Key key,
    @required this.size,
    @required this.imageUrl
  }) : super(key: key);
  final String imageUrl;
  final Size size;

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(bottom: kDefaultPadding * 3),
      child: SizedBox(
        height: size.height * 0.7,
        child: Row(
          children: <Widget>[
            Expanded(
              child: Padding(
                padding:
                    const EdgeInsets.symmetric(vertical: kDefaultPadding * 3),
                child:
                    Align(
                      alignment: Alignment.topLeft,
                      child: IconButton(
                        padding:
                            EdgeInsets.symmetric(horizontal: kDefaultPadding),
                        icon: SvgPicture.asset("assets/icons/back_arrow.svg"),
                        onPressed: () {
                          Navigator.pop(context);
                        },
                      ),
                    ),

              ),
            ),
            Container(
              height: size.height * 0.8,
              width: size.width ,
              decoration: BoxDecoration(
                borderRadius: BorderRadius.only(
                  topLeft: Radius.circular(5),
                  bottomLeft: Radius.circular(5),
                ),
                boxShadow: [
                  BoxShadow(
                    offset: Offset(0, 10),
                    blurRadius: 60,
                    color: kPrimaryColor.withOpacity(0.29),
                  ),
                ],
                image: DecorationImage(
                  alignment: Alignment.center,
                  fit: BoxFit.contain,
                  image: NetworkImage(imageUrl),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
