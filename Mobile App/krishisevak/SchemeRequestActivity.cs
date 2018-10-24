
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
	

	[Activity(Label = "SchemeRequestActivity")]
	public class SchemeRequestActivity : Activity
	{
		String Noti;

//	EditText Quantity;

	//	string json;
	//	Button schemebtn;

		protected override void OnCreate(Bundle savedInstanceState)
		{
			
			base.OnCreate(savedInstanceState);
			SetContentView(Resource.Layout.schemerequest);

			String p = Intent.GetStringExtra("id");

			scheme(p);
		//	schemebt = FindViewById<Button>(Resource.Id.);
		//	Quantity = FindViewById<EditText>(Resource.Id.Quantity);

	//	schemebt.Click += Schemebt_Click;


		}



		/*async void Schemebt_Click(object sender, EventArgs e)
		{
			try
			{
				using (HttpClient w = new HttpClient())
				{
					//json = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/newlog.php?username="+username+"&password="+password+"");
					if (Quantity.Text != null)
					{
						Toast.MakeText(this, "Field Mising", ToastLength.Long).Show();
					}
					else
					{
						String s = await w.GetStringAsync("https://farisk2010.000webhostapp.com/php/schemeselection.php?qty=" + Quantity.Text + "&usersid=" + Settings.userid + "&nid=" + Noti + "");

						//	String temp = result.User_id.ToString();
						if (s == "no")
						{
							Toast.MakeText(this, "error", ToastLength.Long).Show();
						}
						else
						{
							Toast.MakeText(this, "Success", ToastLength.Long).Show();
						}
						//	Settings.Name = result.user_info[0].Name;


					}



				}
			}
			catch
			{
				Toast.MakeText(this, "Network Issue", ToastLength.Long).Show();
			}
		}
*/

			async void scheme(String y)
		{
			try
			{
				using (HttpClient wc = new HttpClient())
				{
					//json = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/newlog.php?username="+username+"&password="+password+"");
					//	var s = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/Login.php?username=" + username.Text + "&password=" + password.Text + "");
					var t = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/schemeselection.php?kid=" +y+ "");

					var res= JsonConvert.DeserializeObject<Models.schemeobject>(t);
					//	String temp = result.User_id.ToString();


					TextView schemenames = FindViewById<TextView>(Resource.Id.schemenames);
					TextView schemedescs = FindViewById<TextView>(Resource.Id.schemedescs);
			       TextView lastdates = FindViewById<TextView>(Resource.Id.lastdates);

					TextView maxs = FindViewById<TextView>(Resource.Id.maxs);

					TextView schemeno= FindViewById<TextView>(Resource.Id.schemeno);
		        	 Noti = res.schemelist[0].Not_id;
					String tit = res.schemelist[0].Not_title;
					String descr = res.schemelist[0].Descp;
					String ltdates = res.schemelist[0].Lt_date;
					String maxp = res.schemelist[0].Max_roll;


					schemeno.Text = Noti;

					schemenames.Text = tit;
					maxs.Text = maxp;
					schemedescs.Text = descr;
					lastdates.Text = ltdates;

							
					
					}




			}
			catch
			{

			}
	
}


		}
	}

