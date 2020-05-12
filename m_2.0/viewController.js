exports.getloginform = async (req, res) => {
    try {
      //  const tours = Tour.find();
      res.status(200).render('login', {
        title: 'log in to your account'
      });
    } catch (err) {
      res.status(400).json({
        status: 'failed',
        message: err
      });
    }
  };
  