package com.hackathon.arman.hackathon_nsu;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class DetailsActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_details);

    }

    public void Onclick(View view) {

        /**
         * start details with 360 view
         */
        startActivity(new Intent(this,Degree360.class));
    }
}
