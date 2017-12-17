package com.hackathon.arman.hackathon_nsu.Adapter;

import android.app.Dialog;
import android.graphics.drawable.Drawable;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;

import android.Manifest;
import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.RatingBar;
import android.widget.RelativeLayout;
import android.widget.TextView;


import com.hackathon.arman.hackathon_nsu.DetailsActivity;
import com.hackathon.arman.hackathon_nsu.Model.House;
import com.hackathon.arman.hackathon_nsu.R;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by Majedur Rahman on 9/29/2017.
 * set up recycler view custom adapter
 */

public class RecyclerViewCustomAdapter extends RecyclerView.Adapter<RecyclerViewCustomAdapter.AdapterViewHolder> {


    Context context;
    List<House> houseList;
    LayoutInflater layoutInflater;


    public RecyclerViewCustomAdapter(Context c, List<House> house) {

        context = c;
        houseList = house;
        layoutInflater = LayoutInflater.from(context);


    }

    @Override
    public AdapterViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        View view = layoutInflater.inflate(R.layout.tolet_item, parent, false);

        return new AdapterViewHolder(view, context);
    }

    @Override
    public void onBindViewHolder(AdapterViewHolder holder, int position) {

        holder.imageView.setBackgroundResource(houseList.get(position).getImage());
        holder.titleTextView.setText(houseList.get(position).getHouseTitle().toString());
        holder.rentTextView.setText(houseList.get(position).getHouseRent() + " BDT ");
        holder.ratingBar.setRating((float) houseList.get(position).getHouseRating());
        holder.onItemClick(houseList.get(position));
    }

    @Override
    public int getItemCount() {
        return houseList.size();
    }

    public static class AdapterViewHolder extends RecyclerView.ViewHolder {

        Context context;
        Button callButton;
        ImageView imageView;
        TextView rentTextView;
        TextView titleTextView;
        RatingBar ratingBar;
        CardView cardView;
        ImageView favorite;

        public AdapterViewHolder(View itemView, Context c) {
            super(itemView);
            context = c;

            imageView = itemView.findViewById(R.id.roomImageViewToLet);
            rentTextView = itemView.findViewById(R.id.rentTextView);
            titleTextView = itemView.findViewById(R.id.toletTitle);
            ratingBar = itemView.findViewById(R.id.rattigTolet);
            favorite = itemView.findViewById(R.id.favoriteImage);
            cardView = itemView.findViewById(R.id.cardView);


        }


        public void onItemClick(final House house) {

            cardView.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    context.startActivity(new Intent(context, DetailsActivity.class));
                }
            });


        }

    }
}