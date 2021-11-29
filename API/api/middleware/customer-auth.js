module.exports = (req, res, next) => {
  try {
    if (req.userData.usertype == 0) {
      next();
    } else {
      return res.status(403).send({
        message: "You don't have permission to send this request.",
      });
    }
  } catch (err) {
    console.log(err);
    return res.status(500).send({
      message:
        "Could not perform operation at this time, kindly try again later.",
    });
  }
};
