using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;
using krishisevak.Helpers;
using Newtonsoft.Json;

namespace krishisevak
{
	[Activity(Label = "LoginActivity", Theme = "@style/Theme.Fulle")]
	public class LoginActivity : Activity
	{
		EditText username, password;

		//string json;
		Button loginbtn, signup;

		protected override void OnCreate(Bundle savedInstanceState)
		{
			base.OnCreate(savedInstanceState);


			//nasdas.ItemClick += Nasdas_ItemClick;

			SetContentView(Resource.Layout.login);
			loginbtn = FindViewById<Button>(Resource.Id.loginbtn);
			signup = FindViewById<Button>(Resource.Id.signup);
			username = FindViewById<EditText>(Resource.Id.username);
			password = FindViewById<EditText>(Resource.Id.password);

			loginbtn.Click += loginbtn_Click;

			signup.Click += signup_Click;
			//string s = Intent.GetStringExtra("id");

		}
		/*
		void Nasdas_ItemClick(object sender, AdapterView.ItemClickEventArgs e)
		{
			//items[e.Position].id
		}*/

		async void loginbtn_Click(object sender, EventArgs e)
		{
			try
			{
				using (HttpClient wc = new HttpClient())
				{ 
					//json = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/newlog.php?username="+username+"&password="+password+"");
					var s = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/Login.php?username=" + username.Text + "&password=" + password.Text + "");

					//	String temp = result.User_id.ToString();
					if (s == "no")
					{
						Toast.MakeText(this, "Failed", ToastLength.Long).Show();
					}
					else
					{
						 var result = JsonConvert.DeserializeObject<Models.RootObject>(s);
						Settings.Name = result.users[0].Name;
						Settings.userid = result.users[0].User_id;
						Settings.mobile = result.users[0].Phone_no;
						Settings.kid = result.users[0].KrishiBhavan_id;
						Settings.uid = result.users[0].Aadhar_no;



						StartActivity(typeof(PageActivity));
					}



				}
			}
			catch
			{

			}
		}
		void signup_Click(object sender, EventArgs e)
	{

			StartActivity(typeof(SignupActivity));

		
}
	}
}

     
                       
    
    