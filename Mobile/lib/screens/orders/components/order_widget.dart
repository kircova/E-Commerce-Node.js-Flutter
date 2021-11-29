import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'package:vinyl_app/constants.dart';
import 'package:vinyl_app/screens/cart/components/cart_details.dart';
import 'package:vinyl_app/screens/orders/order_detail/order_detail_screen.dart';

List<CartDetails> demoCarts = [
  CartDetails(personId: 77, productId: 1, productName: "Sus Pus", artist: "Ceza", price: 163.00 , cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0000000686726-1.jpg"),
  CartDetails(personId: 77, productId: 2, productName: "Good Girl Gone Bad", artist: "Rihanna", price: 159.98, cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0001712087001-1.jpg"),
  CartDetails(personId: 77, productId: 3, productName: "Bir de benden dinle", artist: "Müslüm Gürses", price: 114.00 , cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0001755791001-1.jpg"),
  CartDetails(personId: 77, productId: 4, productName: "Bounce", artist: "Bon Jovi", price: 96.00 , cid: 1, quantity: 2, productImgUrl:"https://i.dr.com.tr/cache/600x600-0/originals/0000000706068-1.jpg"),
];

List data = List.generate(
    4,
        (index) => {
      "order_date": "22.22.2222",
          "products": demoCarts,
      "price": "144",
      "status": "onDelivery",
      "oid": "1",
    });


class OrderWidget extends StatefulWidget {

  const OrderWidget({
    Key key,
    //@required this.cart,
  }) : super(key: key);

  //final Cart cart;
  @override
  _OrderWidgetState createState() => _OrderWidgetState();
}

class _OrderWidgetState extends State<OrderWidget> {
  @override
  Widget build(BuildContext context) {
    return Card(
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(10.0),),
      child: Row(
        children: [
          SizedBox(
            width: 88,
            child: AspectRatio(
              aspectRatio: 0.88,
              child: Container(
                padding: EdgeInsets.all(kDefaultPadding),
                decoration: BoxDecoration(
                  color: Color(0xFFF5F6F9),
                  borderRadius: BorderRadius.circular(15),
                ),
                child: SvgPicture.asset("assets/icons/vinyl.svg"),//order image add
              ),
            ),
          ),
          SizedBox(width: 20),
          Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
                data[1]["order_date"],
                style: TextStyle(color: Colors.black, fontSize: 16),
                maxLines: 2,
              ),
              SizedBox(height: 10),
              Text.rich(
                TextSpan(
                  text: "\$${data[1]["price"]}",
                  style: TextStyle(
                      fontWeight: FontWeight.w600, color: kPrimaryColor),
                  children: [
                    TextSpan(
                        text: "  ${data[1]["status"]}",
                        style: Theme.of(context).textTheme.bodyText1),
                  ],
                ),
              )
            ],
          ),
          SizedBox(width: 50),
          RaisedButton(
            onPressed: () {Navigator.push(context,
                MaterialPageRoute(builder: (context) => OrderDetailScreen(oid: data[1]["oid"])));},
            color: kPrimaryColor,
            padding: EdgeInsets.symmetric(horizontal: 20),
            elevation: 2,
            shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(20)),
            child: Text(
              "Details",
              style: TextStyle(
                  fontSize: 12,
                  letterSpacing: 1.5,
                  color: kBackgroundColor),
            ),
          )
        ],
      ),
    );
  }
}
