import 'package:flutter/material.dart';
import 'package:flutter_inappwebview/flutter_inappwebview.dart';

class ShieldBlockedScreen extends StatefulWidget {
  final String url;
  const ShieldBlockedScreen({Key key, this.url}) : super(key: key);
  @override
  _ShieldBlockedScreenState createState() => _ShieldBlockedScreenState();
}

class _ShieldBlockedScreenState extends State<ShieldBlockedScreen> {
  @override
  Widget build(BuildContext context) {
    return WillPopScope(
      child: Scaffold(
        body: SafeArea(
          child: Container(
            child: InAppWebView(
              initialUrlRequest: URLRequest(
                url: Uri.parse(widget.url),
              ),
            ),
          ),
        ),
      ),
      // ignore: missing_return
      onWillPop: () {},
    );
  }
}
