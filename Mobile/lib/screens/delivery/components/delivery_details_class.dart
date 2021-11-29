import 'package:flutter/material.dart';




class DeliveryDetails {
  final int addressId;
  final String personName;
  final String addressName ;
  final String addressDetails ;
  final bool isVisible ;



  DeliveryDetails({
    @required this.personName,
    @required this.addressId,
    @required this.addressName,
    @required this.addressDetails,
    @required this.isVisible,
  });

}

List<DeliveryDetails> demoAddressCarts = [
  DeliveryDetails(addressId: 0, personName: "Name Surname", addressName: "Home", addressDetails: "Address Details demo..", isVisible: true),
  DeliveryDetails(addressId: 1, personName: "Name Surname", addressName: "Work", addressDetails: "Address Details demo..", isVisible: true),
  DeliveryDetails(addressId: 2,personName: "Name Surname", addressName: "Other", addressDetails: "Address Details demo..", isVisible: true),

];
