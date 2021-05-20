# SHIELD | Flutter Plugin

Developed to use **SHIELD's API** and controll applications access.

For SHIELD information and basic tutorial, follow the [Usage](https://shield.valkyriatech.com.br/#usage) section.

## Dependencies

[http](https://pub.dev/packages/http)  
[flutter_inappwebview](https://pub.dev/packages/flutter_inappwebview)

## Installation

Put <code>shield.dart</code> and <code>shield_blocked_screen.dart</code> into <code>/lib</code>

Import <code>shield.dart</code> in the first App screen file:

```dart
import 'shield.dart';
```

## Configuration

In the screen you've imported <code>shield.dart</code>, call the constructor and set you **APP ID**.

```dart
// APP IDENTIFIER DECLARATION
var response = ShieldAuthenticator.authenticate(context, 'PASTE_THE_APP_ID_HERE');

if (response) {
  //continue..
}

```
