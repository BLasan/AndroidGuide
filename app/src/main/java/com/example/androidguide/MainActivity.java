package com.example.androidguide;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Window;
import android.view.WindowManager;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {
private WebView webView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_main);
        webView=(WebView)findViewById(R.id.webView);
        WebSettings webSettings=webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setAllowFileAccess(true);
        webView.loadUrl("file:///android_asset/bootstrap_navbar.html");

     //   webView.setWebViewClient(new WebViewClient());
    }

    @Override
    public void onBackPressed() {

        if(webView.canGoBack())
            webView.goBack();

        else {
            super.onBackPressed();
            System.exit(1);
        }
    }
}
