using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.Media;
using Android.OS;
using Android.Runtime;
using Android.Text.Format;
using Android.Views;
using Android.Widget;
using Newtonsoft.Json;

namespace krishisevak
{
	public class SchemesAdapter : BaseAdapter<Models.Schemelist>
	{
		//SchemesAdapter player=;
		private List<Models.Schemelist> mItems;
		private Context mContext;
	//	private List<Models.Schemelist> temp;

		public SchemesAdapter(Context context, List<Models.Schemelist> items)
		{
			mItems = items;
			mContext = context;
		}
		public override int Count
		{
			get
			{
				return mItems.Count;

			}
		}
		public override long GetItemId(int position)
		{
			return position;
		}
		public override Models.Schemelist this[int position]
		{
			get
			{
				return mItems[position];
			}
		}
		public override View GetView(int position, View convertView, ViewGroup parent)
		{
			View row = convertView;
			if (row == null)
			{
				row = LayoutInflater.From(mContext).Inflate(Resource.Layout.schemelists, null, false);
			}
			TextView schemename  = row.FindViewById<TextView>(Resource.Id.schemename);
			TextView schemedesc = row.FindViewById<TextView>(Resource.Id.schemedesc);
			TextView schemedate = row.FindViewById<TextView>(Resource.Id.lastdate);

			   
			schemename.Text = mItems[position].Not_title;
			schemedesc.Text = mItems[position].Descp;
			schemedate.Text = mItems[position].Lt_date;
	


			return row;
		}


	}
}