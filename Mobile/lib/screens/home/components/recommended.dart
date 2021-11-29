import 'package:flutter/material.dart';
import 'package:vinyl_app/screens/details/details_screen.dart';

import 'package:http/http.dart' as http;
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'dart:convert';
import 'package:vinyl_app/constants.dart';
import 'package:google_fonts/google_fonts.dart';

import 'package:vinyl_app/components/product.dart';
import 'package:vinyl_app/components/request.dart';

class RecomendsPlants extends StatefulWidget {
  @override
  _RecomendsPlantsState createState() => _RecomendsPlantsState();
}

class _RecomendsPlantsState extends State<RecomendsPlants> {
  List<Widget> childrens;
  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    this.GetFeatured();
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      scrollDirection: Axis.horizontal,
      child: Row(
        children: childrens != null ? childrens : [],
      ),
    );
  }
  Future GetFeatured() async{
    var APIURL = env["apiUrl"] + "/products/featured"; // bizim link

    List<Widget> childrenList = [];

    http.Response response = await http.get(Uri.parse(APIURL));

    var data = jsonDecode(response.body);
    //print("DATA: ${data["genres"]}");
    print(data);
    if(response.statusCode == 200){


      for(int i=0; i< 5; i++) {
        http.Response response = await http.get(Uri.parse(env["apiUrl"] + "/products/" + data["values"][i][0]));
        var productData = jsonDecode(response.body);
        Product product = Product.fromJson(productData['product'], productData['songs']);

        childrenList.add(RecomendPlantCard(
          image: product.productImgUrl,
          album: product.pname,
          artist: product.artist,
          price: product.price,
          press: () { Navigator.push(context,
              MaterialPageRoute(builder: (context) => DetailsScreen(product: product,)));},
        ));
      }

      setState(() {
        childrens = childrenList;
      });

    }
    else if(response.statusCode == 400){
      // biyer bosluk bırakılmıs, onu uyarcaz
    }
    else if(response.statusCode == 422){
      // girilen bilgiler yanlış
    }
    else if(response.statusCode == 500){
      // serverda hata varsa
    }
  }
}

class RecomendPlantCard extends StatelessWidget {
  const RecomendPlantCard({
    Key key,
    this.image,
    this.album,
    this.artist,
    this.price,
    this.press,
  }) : super(key: key);

  final String image, album, artist;
  final double price;
  final Function press;

  @override
  Widget build(BuildContext context) {
    Size size = MediaQuery.of(context).size;
    return Container(
      margin: EdgeInsets.only(
        left: kDefaultPadding,
        top: kDefaultPadding / 2,
        bottom: kDefaultPadding * 2.5,
      ),
      width: size.width * 0.5,
      child: GestureDetector(
        onTap: press,
        child: Column(
        children: <Widget>[
          Image.network(image),
            Container(
              padding: EdgeInsets.all(kDefaultPadding / 2),
              decoration: BoxDecoration(
                color: Colors.white,
                borderRadius: BorderRadius.only(
                  bottomLeft: Radius.circular(10),
                  bottomRight: Radius.circular(10),
                ),
                boxShadow: [
                  BoxShadow(
                    offset: Offset(0, 10),
                    blurRadius: 50,
                    color: kPrimaryColor.withOpacity(0.23),
                  ),
                ],
              ),
              child: Row(
                children: <Widget>[
                  SizedBox(
                    width: 100.0,


                      child: RichText(
                        maxLines: 3,
                        overflow: TextOverflow.ellipsis,
                        text: TextSpan(
                          children: [
                            TextSpan(

                                text: "$album\n",
                                style: Theme.of(context).textTheme.button),

                            TextSpan(
                              text: "$artist",
                              style: TextStyle(
                                color: kPrimaryColor.withOpacity(0.5),
                              ),
                            ),
                          ],
                        ),

                      ),

                  ),
                  Spacer(),
                  Align(
                    alignment: Alignment.bottomLeft,
                    child: Text(
                      '\₺$price',
                      style: Theme.of(context)
                          .textTheme
                          .button
                          .copyWith(color: kPrimaryColor),
                    ),
                  )
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
