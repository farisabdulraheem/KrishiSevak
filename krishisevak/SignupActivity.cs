
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
namespace krishisevak
{
	[Activity(Label = "SignupActivity")]
	public class SignupActivity : Activity
	{EditText sname, spass, scpass, uid, smobile, sid;

		//string json;
		Button submit;

		protected override void OnCreate(Bundle savedInstanceState)
		{
			base.OnCreate(savedInstanceState);
			SetContentView(Resource.Layout.signup);


			submit = FindViewById<Button>(Resource.Id.submit);
		sid = FindViewById<EditText>(Resource.Id.sid);
			smobile = FindViewById<EditText>(Resource.Id.smobile);
			sname = FindViewById<EditText>(Resource.Id.sname);
			spass= FindViewById<EditText>(Resource.Id.spass);
			scpass = FindViewById<EditText>(Resource.Id.scpass);
			uid = FindViewById<EditText>(Resource.Id.uid);
			submit.Click += submit_Click;

		}
		async void submit_Click (object sender, EventArgs e)
	
			{
			
				try
				{
					using (HttpClient w = new HttpClient())
					{
					//json = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/newlog.php?username="+username+"&password="+password+"");
					if (spass.Text != scpass.Text)
					{
						Toast.MakeText(this, "Passwrod are not matching", ToastLength.Long).Show();
					}
					else
					{
						String s = await w.GetStringAsync("https://farisk2010.000webhostapp.com/php/usrsignup.php?sname=" + sname.Text + "&spass=" + spass.Text + "&scpass="+scpass.Text+ "&sid=" + sid.Text + "&mobile=" + smobile.Text +"&uid="+uid.Text+"");

					//	String temp = result.User_id.ToString();
					if (s == "no")
						{
							Toast.MakeText(this, "Field Missing", ToastLength.Long).Show();
						}
						else
						{
							Toast.MakeText(this, "Success", ToastLength.Long).Show();
						}
						//	Settings.Name = result.user_info[0].Name;

							               StartActivity(typeof(LoginActivity));
						}



					}
				}
				catch
				{
				Toast.MakeText(this, "Network Issue", ToastLength.Long).Show();
				}
			}
			// Create your application here
		}
	}
