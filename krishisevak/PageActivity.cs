
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;
using krishisevak.Helpers;

namespace krishisevak
{
	[Activity(Label = "PageActivity",Theme = "@style/Theme.Fulle")]
	public class PageActivity : Activity
	{ImageButton logout;
		ImageView booking, status, information, profile, favourite, schemelogo;

		protected override void OnCreate(Bundle savedInstanceState)
		{
			base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.main);
			// Create your application here
			schemelogo = FindViewById<ImageView>(Resource.Id.scheme);
			booking = FindViewById<ImageView>(Resource.Id.booking);
			status = FindViewById<ImageView>(Resource.Id.status);
			information = FindViewById<ImageView>(Resource.Id.information);
			logout = FindViewById<ImageButton>(Resource.Id.logout);
			profile = FindViewById<ImageView>(Resource.Id.profile);
			favourite = FindViewById<ImageView>(Resource.Id.favourite);
			logout.Click += Logout_Click;
			schemelogo.Click += schemelogo_Click;


		}

		void schemelogo_Click(object sender, EventArgs e)
		{
			StartActivity(typeof(SchemeActivity));
		}

			
void Logout_Click (object sender, EventArgs e)
		{
			Settings.Name = null;
			StartActivity(typeof(LoginActivity));
		}
	}
}
