package com.midexigner.mastermind;

public class User {
    private String name;

    private String username;
    private String email;

    private String password;

    public User(String name, String email,String username,String password) {
        this.name = name;
        this.username = username;
        this.email = email;
        this.password = password;
    }

    public String getName() {
        return name;
    }
    public String getUsername() {
        return username;
    }
    public String getEmail() {
        return email;
    }
    public String getPassword() {
        return password;
    }


}

