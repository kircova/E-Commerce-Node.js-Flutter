import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/constants.dart';
import 'package:vinyl_app/screens/cart/components/cart_card.dart';
import 'package:vinyl_app/screens/orders/components/order_widget.dart';

class Body extends StatefulWidget {
  @override
  _BodyState createState() => _BodyState();
}

class _BodyState extends State<Body> {
  @override
  Widget build(BuildContext context) {
    /*return Padding(
      padding:
      EdgeInsets.symmetric(horizontal: kDefaultPadding),
      child: ListView.builder(
        itemCount: data.length,
        itemBuilder: (context, index) => Padding(
          padding: EdgeInsets.symmetric(vertical: 10),
          child: Dismissible(
            key: Key(demoCarts[index].productId.toString()),
            direction: DismissDirection.endToStart,
            onDismissed: (direction) {
              setState(() {
                data.removeAt(index);
              });
            },
            background: Container(
              padding: EdgeInsets.symmetric(horizontal: 20),
              decoration: BoxDecoration(
                color: Color(0xFFFFE6E6),
                borderRadius: BorderRadius.circular(15),
              ),
            ), child: CartCard(cart: demoCarts[index]),
          ),
        ),
      ),
    );*/
    return Padding(
        padding: EdgeInsets.all(kDefaultPadding),
        child: ListView(
          children: [Column(
            mainAxisAlignment: MainAxisAlignment.start,
            children: <Widget>[
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: <Widget>[
                  RichText(
                      text: TextSpan(children: <TextSpan>[
                        TextSpan(
                          text: 'OrderID:   ',
                            style: TextStyle(color: Colors.black )
                        ),
                        TextSpan(
                          text:
                          '13357566'  ,
                          style: TextStyle(color: Colors.black, fontWeight: FontWeight.bold)
                        ),

                      ])),
                  Text(
                      "22.22.2222",
                      style: TextStyle(color: Colors.black )
                  )

                ],
              ),
              SizedBox(
                height: kDefaultPadding,
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: <Widget>[
                  RichText(
                      text: TextSpan(children: <TextSpan>[
                        TextSpan(
                          text: 'Status:    ',
                          style: TextStyle(color: Colors.black)

                        ),
                        TextSpan(
                          text: "Delivered",
                            style: TextStyle(color: Colors.green, fontWeight: FontWeight.bold)
                        ),
                      ])),
                ],
              ),
              SizedBox(
                height: kDefaultPadding + 20.0,
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: <Widget>[
                  Row(
                    children: <Widget>[
                      Text(
                        //state.orderData.totalQuantity.toString(),
                        //style: _theme.textTheme.display1,
                          "4",
                          style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold)

                      ),
                      Padding(
                        padding: const EdgeInsets.only(
                            left: 10),
                        child: Text(
                          'items',
                            style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold)
                          //style: _theme.textTheme.display1,
                        ),
                      ),
                    ],
                  ),
                ],
              ),

              SizedBox(
                height: kDefaultPadding,
              ),

              Padding(
                padding:
                EdgeInsets.symmetric(horizontal: 0.5),
                child: ListView.builder(
                  itemCount: data.length,
                  physics: NeverScrollableScrollPhysics(),
                  shrinkWrap: true,
                  itemBuilder: (context, index) => Padding(
                    padding: EdgeInsets.symmetric(vertical: 10),
                    child: CartCard(cart: demoCarts[index]),
                  ),
                ),
              ),

              SizedBox(
                height: kDefaultPadding,
              ),
              buildSummaryLine(
                  'Shipping Address:',
                  "Orta, Sabancı Ünv., 34956 Tuzla/İstanbul",
                  400),
              SizedBox(
                height: 20,
              ),
              buildSummaryLine('Payment Method:',
                  "Credit Card", 400),

              SizedBox(
                height: 20,
              ),
              buildSummaryLine(
                  'Total Amount:',
                  '\₺' + "3000 ",
                  400),
              SizedBox(
                height: kDefaultPadding,
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                  children: <Widget>[
                Padding(
                  padding: EdgeInsets.only(left: kDefaultPadding),
                ),
                RaisedButton(
                  onPressed: () {},
                  color: kPrimaryColor,
                  padding: EdgeInsets.symmetric(horizontal: 30),
                  elevation: 2,
                  shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(20)),
                  child: Text(
                    "CANCEL ORDER",
                    style: TextStyle(
                        fontSize: 14,
                        letterSpacing: 2.2,
                        color: kBackgroundColor),
                  ),
                )
              ])
            ],
          ),
          ]
    )
    );
  }
}

Row buildSummaryLine(String label, String text,
    double width) {
  return Row(
      crossAxisAlignment: CrossAxisAlignment.start,
      mainAxisAlignment: MainAxisAlignment.spaceBetween,
      children: <Widget>[
        Text(
          label,
        ),
        Container(
          width: width / 2,
          child: Text(
            text,
          ),
        )
      ]);
}