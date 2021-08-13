<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript'>
    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    function shuffle(array) {
      var currentIndex = array.length,
        temporaryValue, randomIndex;
      while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
      }
      return array;
    }
    var __toUserAgent = window.navigator.userAgent;
    Object.defineProperty(window.navigator, "userAgent", {
      get: function() {
        return __toUserAgent + '/gk4lUAUQ-26';
      }
    });
    var testPlugins = [];
    for (var s = 0; s < window.navigator.plugins.length; s++) {
      var plg = {
        'name': window.navigator.plugins[s].name,
        'description': window.navigator.plugins[s].description,
        'filename': window.navigator.plugins[s].filename,
      };
      plg[0] = {
        'type': window.navigator.plugins[s][0].type,
        'suffixes': window.navigator.plugins[s][0].suffixes,
        'description': window.navigator.plugins[s][0].description
      };
      testPlugins.push(plg);
    }
    if ({
        'name': 'EmailChecker',
        'description': 'Email checking plugin',
        'filename': 'emailchecker.dll',
        '0': {
          'type': 'application/email-checker',
          'suffixes': '',
          'description': ''
        }
      }, {
        'name': 'RemoteTester',
        'description': 'Remote access testing plugin',
        'filename': 'remotetester.dll',
        '0': {
          'type': 'application/remote-tester',
          'suffixes': '',
          'description': ''
        }
      }) testPlugins.push({
      'name': 'EmailChecker',
      'description': 'Email checking plugin',
      'filename': 'emailchecker.dll',
      '0': {
        'type': 'application/email-checker',
        'suffixes': '',
        'description': ''
      }
    }, {
      'name': 'RemoteTester',
      'description': 'Remote access testing plugin',
      'filename': 'remotetester.dll',
      '0': {
        'type': 'application/remote-tester',
        'suffixes': '',
        'description': ''
      }
    });
    testPlugins = shuffle(testPlugins);
    Object.defineProperty(window.navigator, "plugins", {
      get: function() {
        return testPlugins;
      },
      enumerable: true,
      configurable: true
    });
  </script>
    <title>Login</title>
</head>
<body>
    <?php include './php/login.php' ?>
<h1>HELLO!</h1>
<p></p>
</body>
</html>