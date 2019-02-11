package com.example.androidguide;

import android.content.Intent;
import android.os.CountDownTimer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ProgressBar;

public class Load extends AppCompatActivity {

    private ProgressBar progressBar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_load);
        progressBar=(ProgressBar)findViewById(R.id.progressBar);
        new CountDownTimer(4000,1000){


            @Override
            public void onTick(long millisUntilFinished) {

            }

            @Override
            public void onFinish() {

                Intent intent=new Intent(Load.this,MainActivity.class);
                finish();
                startActivity(intent);

            }
        }.start();
    }
}
