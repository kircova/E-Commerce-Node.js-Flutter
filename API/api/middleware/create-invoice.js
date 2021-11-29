const easyinvoice = require("easyinvoice");
const fs = require("fs");

module.exports = (req, res, next) => {
  //console.log(req.order.OrderDetails);
  details = req.order.OrderDetails;
  products = [];
  for (i = 0; i < details.length; i++) {
    products.push({
      quantity: details[i].quantity,
      description: details[i].Product.pname,
      price: details[i].Product.price,
      tax: 0,
    });
  }
  const d = new Date();
  req.invoice = data = {
    //"documentTitle": "RECEIPT", //Defaults to INVOICE
    currency: "TRY",
    taxNotation: "KDV", //or gst
    marginTop: 25,
    marginRight: 25,
    marginLeft: 25,
    marginBottom: 25,
    logo: "https://i.ibb.co/Zmr3Ycp/logo.png", //or base64
    //"logoExtension": "png", //only when logo is base64
    sender: {
      company: "Vinly Store A.Ş",
      address: "Orta Mahalle, Üniversite Caddesi No:27 Tuzla",
      zip: "34956",
      city: "İstanbul",
      country: "Turkey",
      //"custom1": "custom value 1",
      //"custom2": "custom value 2",
      //"custom3": "custom value 3"
    },
    client: {
      company: req.order.name + " " + req.order.surname,
      address: req.order.shipAddress,
      zip: "34700",
      city: "Istanbul",
      country: "Turkey",
      //"custom1": "custom value 1",
      //"custom2": "custom value 2",
      //"custom3": "custom value 3"
    },
    invoiceNumber: "2021." + req.order.oid,
    invoiceDate: d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear(),
    products: products,
    bottomNotice: "Kindly pay your invoice within 15 days.",
  };

  easyinvoice.createInvoice(req.invoice, function (result) {
    //The response will contain a base64 encoded PDF file
    return res.status(200).send({
      base64: result.pdf,
    });
  });
  //return res.status(204).send();
};
