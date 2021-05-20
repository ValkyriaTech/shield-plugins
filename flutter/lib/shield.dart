import 'package:flutter/material.dart';
import 'package:flutter/cupertino.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'shield_blocked_screen.dart';

class ShieldAuthenticator {
  String appIndenfier;
  String host = 'https://shield.valkyriatech.com.br/';

  ShieldAuthenticator.authenticate(BuildContext context, String appIndenfier) {
    // ignore: unnecessary_statements
    (() async {
      var data = await http.get(
          host + '?action=verifyStatus&app_identifier=' + appIndenfier,
          headers: null);
      if (data.body != null && data.body != '') {
        var decoded = json.decode(data.body);
        if (decoded['status'] == 0) {
          String url = '';
          if (decoded['content']['redirect_page'] != '' &&
              decoded['content']['redirect_page'] != null) {
            url = decoded['content']['redirect_page'];
          } else {
            url = host + '?action=inactiveApp&app_identifier=' + appIndenfier;
          }
          Navigator.push(
            context,
            MaterialPageRoute(
              builder: (context) => ShieldBlockedScreen(
                url: url,
              ),
            ),
          );
        } else
          return (decoded['status'] == 1);
      }
    }());
  }
}
