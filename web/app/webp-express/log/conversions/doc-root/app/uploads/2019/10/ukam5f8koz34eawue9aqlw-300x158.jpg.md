WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:01:39

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg
Dimension: 300 x 158
Output:    2030 bytes Y-U-V-All-PSNR 42.89 45.16 43.31   43.27 dB
           (0.34 bpp)
block count:  intra4:         46  (24.21%)
              intra16:       144  (75.79%)
              skipped:       160  (84.21%)
bytes used:  header:            108  (5.3%)
             mode-partition:    247  (12.2%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1144 |       0 |       4 |       0 |    1148  (56.6%)
 intra16-coeffs:  |       8 |       0 |       0 |       0 |       8  (0.4%)
  chroma coeffs:  |     488 |       0 |       0 |       0 |     488  (24.0%)
    macroblocks:  |      29%|       1%|       4%|      66%|     190
      quantizer:  |      39 |      37 |      27 |      21 |
   filter level:  |      11 |       9 |       4 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1640 |       0 |       4 |       0 |    1644  (81.0%)

Success
Reduction: 56% (went from 4565 bytes to 2030 bytes)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/ukam5f8koz34eawue9aqlw-300x158.jpg
Dimension: 300 x 158
Output:    10426 bytes (1.76 bpp)
Lossless-ARGB compressed size: 10426 bytes
  * Header size: 552 bytes, image data size: 9848
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: -128% (went from 4565 bytes to 10426 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 207 ms, reducing file size with 56% (went from 4565 bytes to 2030 bytes)
