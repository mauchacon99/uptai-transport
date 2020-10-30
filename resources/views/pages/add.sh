for file in *.php; do 



echo "" | cat - "${file}" >> "${file}"
echo "@endsection" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "@section('head-assets')" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "@endsection" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "@section('footer-assets')" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "" | cat - "${file}" >> "${file}"
echo "@endsection" | cat - "${file}" >> "${file}"






sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n@section('content')"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n@endsection"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n@section('breadcrumb')"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n@section('pageTitle', 'FixedPlus - Laravel Admin Dashboard Template')"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n"'/' ${file};
sed -i '1s/^/'"\r\n@extends('ducor::layouts.app')"'/' ${file};


done

