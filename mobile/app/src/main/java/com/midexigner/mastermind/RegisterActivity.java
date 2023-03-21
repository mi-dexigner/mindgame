package com.midexigner.mastermind;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.EditText;
import android.widget.Button;
import android.view.View;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.Volley;
import com.google.gson.Gson;

public class RegisterActivity extends AppCompatActivity {

    EditText username;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
        EditText nameText = findViewById(R.id.fullname);
        EditText usernameText = findViewById(R.id.username);
        EditText emailText = findViewById(R.id.email_address);
        EditText passwordText = findViewById(R.id.password);
        Button submitButton = findViewById(R.id.register_button);

        submitButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String name = nameText.getText().toString().trim();
                String username = usernameText.getText().toString().trim();
                String email = emailText.getText().toString().trim();
                String password = passwordText.getText().toString().trim();

                insertData(name, username,email,password);
            }
        });




    }

    private void insertData(String name, String username, String email, String password) {
        String url = "http://localhost:8000/api/users";

        User user = new User(name,username, email,password);

        Gson gson = new Gson();
        String requestBody = gson.toJson(user);

        JsonObjectRequest request = new JsonObjectRequest(Request.Method.POST, url, null,
                response -> {
                    // Handle the API response
                },
                error -> {
                    // Handle the API error
                }) {
            @Override
            public byte[] getBody() {
                return requestBody.getBytes();
            }

            @Override
            public String getBodyContentType() {
                return "application/json";
            }
        };

        RequestQueue queue = Volley.newRequestQueue(this);
        queue.add(request);
    }


}